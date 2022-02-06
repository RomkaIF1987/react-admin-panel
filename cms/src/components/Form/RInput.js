import React, { forwardRef, useEffect, useState } from "react";
import { CInput, CLabel, CFormText } from "@coreui/react";

const RInput = forwardRef(
  (
    {
      className = "",
      label,
      id,
      type = "text",
      helperBlock = false,
      error = false,
      helperText = "",
      errorText = "",
      ...props
    },
    ref
  ) => {
    return (
      <>
        <CLabel htmlFor={id}>{label}</CLabel>
        <CInput {...props} type={type} id={id} invalid={error} />
        {helperBlock && helperText && !error && (
          <CFormText className="help-block">Please enter your email</CFormText>
        )}
        {error && errorText && (
          <CFormText className="error-block">Please enter your email</CFormText>
        )}
      </>
    );
  }
);

export default RInput;
