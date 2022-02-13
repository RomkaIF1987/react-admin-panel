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
import { useParams, useHistory } from "react-router-dom";
import { RImageInput, RInput, RSelect, RToggle } from "../../components/Form";
import usersService from "./services/usersService";
import baseCRUDService from "../../services/baseCRUDService";

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
  const history = useHistory();
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
    setValue("avatar", user?.avatar || "");
    setValue("name", user?.name || "");
    setValue("email", user?.email || "");
    setValue("password", user?.password || "");
    setValue("role", user?.role || "");
    setValue("status", user?.status || "");
    // eslint-disable-next-line
  }, [user]);

  const onSubmit = (data) => {
    baseCRUDService.setApiUrl("/users");
    const formDataInitial = new FormData();
    baseCRUDService
      .storeRecord(baseCRUDService.buildFormData(formDataInitial, data))
      .then(() => {
        history.push("/users");
      });
  };

  return (
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>{id ? "Edit User" : "Create New User"}</CCardHeader>
          <CCardBody>
            <CForm action="" method="post" onSubmit={handleSubmit(onSubmit)}>
              <CContainer fluid>
                <CRow>
                  <CCol sm="6">
                    <CFormGroup>
                      <Controller
                        name="avatar"
                        control={control}
                        render={({ field: { value, onChange, name } }) => (
                          <RImageInput
                            label="Avatar"
                            id="avatar"
                            name={name}
                            type="file"
                            onChange={(e) => {
                              onChange(e);
                              if (!e) {
                                setValue(name, e);
                              }
                            }}
                            value={value}
                            placeholder="Choose Photo"
                            error={!!errors.avatar}
                            errorText={errors?.avatar?.message}
                          />
                        )}
                      />
                    </CFormGroup>
                  </CCol>
                  <CCol sm="6">
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
                    </CFormGroup>
                  </CCol>
                </CRow>
                <CRow>
                  <CCol sm="6">
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
                  </CCol>
                  <CCol sm="6">
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
                  </CCol>
                </CRow>
                <CRow>
                  <CCol sm="6">
                    <CFormGroup>
                      <Controller
                        name="role"
                        control={control}
                        defaultValue=""
                        render={({ field: { value, onChange } }) => (
                          <RSelect
                            label="Role"
                            id="role"
                            name="role"
                            type="role"
                            onChange={onChange}
                            value={value}
                            error={!!errors.role}
                            errorText={errors?.role?.message}
                            options={[
                              {
                                label: "admin",
                                value: "admin",
                              },
                              {
                                label: "super admin",
                                value: "superadmin",
                              },
                            ]}
                          />
                        )}
                      />
                    </CFormGroup>
                  </CCol>
                  <CCol sm="6">
                    <CFormGroup>
                      <Controller
                        name="status"
                        control={control}
                        defaultValue={false}
                        render={({ field: { value, onChange } }) => (
                          <RToggle
                            label="Status"
                            id="status"
                            name="status"
                            onChange={onChange}
                            value={value}
                          />
                        )}
                      />
                    </CFormGroup>
                  </CCol>
                </CRow>
                <CButton type="submit" color="primary">
                  Submit
                </CButton>
              </CContainer>
            </CForm>
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
  );
}

export default User;
