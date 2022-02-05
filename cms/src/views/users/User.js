import React from "react";
import {
  CContainer,
  CCard,
  CCardBody,
  CRow,
  CCol,
  CForm,
  CFormGroup,
  CLabel,
  CInput,
  CCardHeader,
  CButton,
} from "@coreui/react";
import { useForm, Controller } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";

function User({ match }) {
  const validationSchema = yup.object({
    name: yup.string().required(),
    email: yup.string().email().required(),
    password: yup.string().required(),
  });

  const formData = useForm({
    resolver: yupResolver(validationSchema),
    mode: "onSubmit",
    shouldFocusError: false,
  });

  const { control, formState, handleSubmit, setValue, watch } = formData;
  const { errors } = formState;

  const onSubmit = (data) => console.log(data);

  return (
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>Create New User</CCardHeader>
          <CCardBody>
            <CContainer fluid>
              <CRow>
                <CCol sm="12">
                  <CForm
                    action=""
                    method="post"
                    onSubmit={handleSubmit(onSubmit)}
                  >
                    <CFormGroup>
                      <CLabel htmlFor="name">Name</CLabel>
                      <Controller
                        name="name"
                        control={control}
                        defaultValue=""
                        render={({ field: { value, onChange } }) => (
                          <CInput
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Enter Name..."
                            autoComplete="name"
                            onChange={onChange}
                          />
                        )}
                      />
                      {/* <CFormText className="help-block">Please enter your email</CFormText>*/}
                    </CFormGroup>
                    <CFormGroup>
                      <CLabel htmlFor="email">Email</CLabel>
                      <CInput
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter Email.."
                        autoComplete="email"
                      />
                      {/* <CFormText className="help-block">Please enter your email</CFormText>*/}
                    </CFormGroup>
                    <CFormGroup>
                      <CLabel htmlFor="password">Password</CLabel>
                      <CInput
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter Password.."
                        autoComplete="current-password"
                      />
                      {/* <CFormText className="help-block">Please enter your password</CFormText>*/}
                    </CFormGroup>
                    <CButton type="submit" color="primary">
                      Submit
                    </CButton>
                  </CForm>
                </CCol>
              </CRow>
            </CContainer>
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
  );
}

export default User;
