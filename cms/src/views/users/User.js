import React from 'react'
import {CContainer, CCard, CCardBody, CRow, CCol, CForm, CFormGroup, CLabel, CInput, CFormText, CCardHeader} from '@coreui/react'

const User = ({match}) => {

  return (
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
            Create User
          </CCardHeader>
          <CCardBody>
            <CContainer fluid>
              <CRow>
                <CCol sm="12">
                  <CForm action="" method="post">
                    <CFormGroup>
                      <CLabel htmlFor="nf-email">Email</CLabel>
                      <CInput
                        type="email"
                        id="nf-email"
                        name="nf-email"
                        placeholder="Enter Email.."
                        autoComplete="email"
                      />
                      <CFormText className="help-block">Please enter your email</CFormText>
                    </CFormGroup>
                    <CFormGroup>
                      <CLabel htmlFor="nf-password">Password</CLabel>
                      <CInput
                        type="password"
                        id="nf-password"
                        name="nf-password"
                        placeholder="Enter Password.."
                        autoComplete="current-password"
                      />
                      <CFormText className="help-block">Please enter your password</CFormText>
                    </CFormGroup>
                  </CForm>
                </CCol>
              </CRow>
            </CContainer>
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
  )
}

export default User
