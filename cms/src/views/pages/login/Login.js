import React, { useState } from "react";
import PropTypes from "prop-types";
import {
  CButton,
  CCard,
  CCardBody,
  CCardGroup,
  CCol,
  CContainer,
  CForm,
  CInput,
  CInputGroup,
  CInputGroupPrepend,
  CInputGroupText,
  CRow,
} from "@coreui/react";
import CIcon from "@coreui/icons-react";
import http, { baseApiURL } from "../../../http-common";

function useLoginValue(defaultValue = "") {
  const [login, setLogin] = useState(defaultValue);

  return {
    bind: {
      login,
      onChange: (event) => setLogin(event.target.value),
    },
    clear: () => setLogin(""),
    value: () => login,
  };
}

function usePasswordValue(defaultValue = "") {
  const [password, setPassword] = useState(defaultValue);

  return {
    bind: {
      password,
      onChange: (event) => setPassword(event.target.value),
    },
    clear: () => setPassword(""),
    value: () => password,
  };
}

async function loginUser(credentials) {
  return http
    .post(`${baseApiURL}/login`, credentials)
    .then((data) => data)
    .catch((error) => {
      console.error(error);
    });
}

function Login({ setToken }) {
  const login = useLoginValue("");
  const password = usePasswordValue("");

  const submitHandler = async (e) => {
    e.preventDefault();
    const data = await loginUser({
      email: login.value(),
      password: password.value(),
    });
    if (data?.data?.access_token && data?.data?.status) {
      setToken(data.data.access_token);
      const localStorageData = {
        roles: data.data.roles,
        name: data.data.name,
        tokenExpires: Date.now() + parseInt(data.data.expires_in, 10) * 1000,
      };
      let rzapInfo = JSON.parse(localStorage.getItem("rzapInfo"));
      if (rzapInfo) {
        rzapInfo = { ...rzapInfo, ...localStorageData };
      } else {
        rzapInfo = localStorageData;
      }
      localStorage.setItem("rzapInfo", JSON.stringify(rzapInfo));
    }
  };

  return (
    <div className="c-app c-default-layout flex-row align-items-center">
      <CContainer>
        <CRow className="justify-content-center">
          <CCol md="5">
            <CCardGroup>
              <CCard className="p-4">
                <CCardBody>
                  <CForm onSubmit={submitHandler}>
                    <h1>Login</h1>
                    <p className="text-muted">Sign In to your account</p>
                    <CInputGroup className="mb-3">
                      <CInputGroupPrepend>
                        <CInputGroupText>
                          <CIcon name="cil-user" />
                        </CInputGroupText>
                      </CInputGroupPrepend>
                      <CInput
                        type="text"
                        placeholder="Username"
                        autoComplete="username"
                        {...login.bind}
                      />
                    </CInputGroup>
                    <CInputGroup className="mb-4">
                      <CInputGroupPrepend>
                        <CInputGroupText>
                          <CIcon name="cil-lock-locked" />
                        </CInputGroupText>
                      </CInputGroupPrepend>
                      <CInput
                        type="password"
                        placeholder="Password"
                        autoComplete="current-password"
                        {...password.bind}
                      />
                    </CInputGroup>
                    <CRow>
                      <CCol xs="6">
                        <CButton color="primary" className="px-4" type="submit">
                          Login
                        </CButton>
                      </CCol>
                      <CCol xs="6" className="text-right">
                        <CButton color="link" className="px-0">
                          Forgot password?
                        </CButton>
                      </CCol>
                    </CRow>
                  </CForm>
                </CCardBody>
              </CCard>
            </CCardGroup>
          </CCol>
        </CRow>
      </CContainer>
    </div>
  );
}

Login.propTypes = {
  setToken: PropTypes.func.isRequired,
};

export default Login;
