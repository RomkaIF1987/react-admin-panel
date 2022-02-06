import React, { useEffect, useState } from "react";
import {
  CContainer,
  CCard,
  CCardBody,
  CRow,
  CCol,
  CForm,
  CFormGroup,
  CCardHeader,
  CButton,
} from "@coreui/react";
import { useForm, Controller } from "react-hook-form";
import { yupResolver } from "@hookform/resolvers/yup";
import * as yup from "yup";
import { useParams } from "react-router-dom";
import { RInput } from "../../components/Form";
import usersService from "./services/usersService";

function User() {
  const validationSchema = yup.object({
    name: yup.string().required(),
    email: yup
      .string()
      .email("Please enter a valid email")
      .required("Please enter your email"),
    password: yup.string().required(),
  });

  const { id } = useParams();
  const formData = useForm({
    resolver: yupResolver(validationSchema),
    mode: "onSubmit",
    shouldFocusError: false,
  });

  const { control, formState, handleSubmit, setValue, watch } = formData;
  const { errors } = formState;

  const [user, setUser] = useState({});

  // mounting
  useEffect(() => {
    if (id) {
      (async () => {
        const result = await usersService?.getUser({ id });
        if (result) {
          setUser(result);
        }
      })();
    }
    // eslint-disable-next-line
    }, []);

  useEffect(() => {
    setValue("name", user?.name || "");
    setValue("email", user?.email || "");
    // eslint-disable-next-line
  }, [user]);

  const onSubmit = (data) => console.log(data);

  return (
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>{id ? "Edit User" : "Create New User"}</CCardHeader>
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
                      <Controller
                        name="name"
                        control={control}
                        defaultValue={user?.name || ""}
                        render={({ field: { value, onChange } }) => (
                          <RInput
                            label="Name"
                            id="name"
                            name="name"
                            onChange={onChange}
                            value={value}
                            placeholder="Enter Name.."
                            autoComplete="name"
                            error={!!errors.name}
                            errorText={errors?.name?.message}
                          />
                        )}
                      />
                      {/* <CFormText className="help-block">Please enter your email</CFormText>*/}
                    </CFormGroup>
                    <CFormGroup>
                      <Controller
                        name="email"
                        control={control}
                        defaultValue={user?.email || ""}
                        render={({ field: { value, onChange } }) => (
                          <RInput
                            label="Email"
                            id="email"
                            name="email"
                            onChange={onChange}
                            value={value}
                            placeholder="Enter Email..."
                            autoComplete="email"
                            error={!!errors.email}
                            errorText={errors?.email?.message}
                          />
                        )}
                      />
                    </CFormGroup>
                    <CFormGroup>
                      <Controller
                        name="password"
                        control={control}
                        defaultValue=""
                        render={({ field: { value, onChange } }) => (
                          <RInput
                            label="Password"
                            id="password"
                            name="password"
                            type="password"
                            onChange={onChange}
                            value={value}
                            placeholder="Enter Password..."
                            autoComplete="password"
                            error={!!errors.password}
                            errorText={errors?.password?.message}
                          />
                        )}
                      />
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
