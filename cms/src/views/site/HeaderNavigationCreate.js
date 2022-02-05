import React, { useEffect, useState } from "react";
import {
  CButton,
  CCard,
  CCardBody,
  CCardFooter,
  CCardHeader,
  CCol,
  CForm,
  CFormGroup,
  CFormText,
  CInput,
  CLabel,
  CSelect,
  CRow,
  CSwitch,
} from "@coreui/react";
import CIcon from "@coreui/icons-react";
import PropTypes from "prop-types";

function BasicForms() {
  const [showSelect, setShowSelect] = useState(false);
  const [headerNavs, setHeaderNavs] = useState([]);
  const [name, setName] = useState("");
  const [linkUrl, setLinkUrl] = useState("");
  const [parentId, setParentId] = useState(null);
  const [status, setStatus] = useState(true);
  const [fields, setFields] = useState([]);

  useEffect(() => {
    fetch(
      `${
        process.env.REACT_APP_API_URL
      }/header-nav/parent-items?token=${JSON.parse(
        localStorage.getItem("token")
      )}`
    )
      .then((response) => response.json())
      // eslint-disable-next-line no-shadow
      .then((headerNavs) => setHeaderNavs(headerNavs));
  }, []);

  // eslint-disable-next-line react/no-unstable-nested-components
  function ParentSelect() {
    return (
      <CFormGroup row>
        <CCol md="3">
          <CLabel htmlFor="select">Select Parent</CLabel>
        </CCol>
        <CCol xs="12" md="9">
          <CSelect
            custom
            name="parent_id"
            id="select"
            onChange={(event) => setParentId(event.target.value)}
          >
            {Object.entries(headerNavs).map((t, k) => (
              <option key={k} value={t[0]}>
                {t[1]}
              </option>
            ))}
          </CSelect>
        </CCol>
      </CFormGroup>
    );
  }

  const handleValidation = () => {
    const errors = {};
    let formIsValid = true;

    // Name
    if (!fields.name) {
      formIsValid = false;
      errors.name = "Cannot be empty";
    }

    if (typeof fields.name !== "undefined") {
      if (!fields.name.match(/^[a-zA-Z]+$/)) {
        formIsValid = false;
        errors.name = "Only letters";
      }
    }

    /* //Email
        if (!fields["email"]) {
            formIsValid = false;
            errors["email"] = "Cannot be empty";
        }

        if (typeof fields["email"] !== "undefined") {
            let lastAtPos = fields["email"].lastIndexOf('@');
            let lastDotPos = fields["email"].lastIndexOf('.');

            if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') === -1 && lastDotPos > 2 && (fields["email"].length - lastDotPos) > 2)) {
                formIsValid = false;
                errors["email"] = "Email is not valid";
            }
        }*/

    setFields({ errors });
    return formIsValid;
  };

  const submitHandler = (e) => {
    e.preventDefault();
    if (handleValidation) {
      alert("Form submitted");
    } else {
      alert("Form has errors.");
    }
    fetch(`${process.env.REACT_APP_API_URL}/header-nav`, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        token: JSON.parse(localStorage.getItem("token")),
        name,
        link_url: linkUrl,
        is_dropdown: showSelect,
        parent_id: parentId,
        show: status,
        edit: true,
        delete: true,
      }),
    })
      .then((data) => data.json())
      // .then(window.location.href = '/site/header-navigation')
      .catch((error) => {
        console.error(error);
      });
  };

  return (
    <CRow>
      <CCol xs="12" md="6">
        <CCard>
          <CCardHeader>Create New Header Navigation</CCardHeader>
          <CCardBody>
            <CForm className="form-horizontal">
              <CFormGroup row>
                <CCol md="3">
                  <CLabel htmlFor="name">Name</CLabel>
                </CCol>
                <CCol xs="12" md="9">
                  <CInput
                    id="name"
                    name="name"
                    placeholder="Enter Name"
                    onChange={(event) => setName(event.target.value)}
                  />
                  <CFormText>Enter Header Navigation Name</CFormText>
                </CCol>
              </CFormGroup>
              <CFormGroup row>
                <CCol md="3">
                  <CLabel htmlFor="link_url">Link Url</CLabel>
                </CCol>
                <CCol xs="12" md="9">
                  <CInput
                    id="link_url"
                    name="link_url"
                    placeholder="Enter Link Url"
                    onChange={(event) => setLinkUrl(event.target.value)}
                  />
                  <CFormText>Enter Link Url</CFormText>
                </CCol>
              </CFormGroup>
              <CFormGroup row>
                <CCol tag="label" sm="3" className="col-form-label">
                  Is Children
                </CCol>
                <CCol sm="9">
                  <CSwitch
                    className="mr-1"
                    color="primary"
                    name="is_dropdown"
                    onChange={(event) => setShowSelect(event.target.checked)}
                  />
                </CCol>
              </CFormGroup>
              {showSelect && <ParentSelect />}
              <CFormGroup row>
                <CCol tag="label" sm="3" className="col-form-label">
                  Status
                </CCol>
                <CCol sm="9">
                  <CSwitch
                    className="mr-1"
                    color="primary"
                    name="show"
                    onChange={(event) => setStatus(event.target.checked)}
                    checked
                  />
                </CCol>
              </CFormGroup>
            </CForm>
          </CCardBody>
          <CCardFooter>
            <CButton
              type="submit"
              size="sm"
              color="primary"
              onClick={submitHandler}
            >
              <CIcon name="cil-scrubber" /> Submit
            </CButton>
            <CButton type="reset" size="sm" color="danger">
              <CIcon name="cil-ban" /> Reset
            </CButton>
          </CCardFooter>
        </CCard>
      </CCol>
    </CRow>
  );
}

BasicForms.propTypes = {
  name: PropTypes.string.isRequired,
};

export default BasicForms;
