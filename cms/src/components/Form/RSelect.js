import React, { forwardRef } from "react";
import { CSelect, CLabel, CFormText } from "@coreui/react";

const RSelect = forwardRef(
  (
    {
      options,
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
        <CSelect {...props} type={type} id={id} invalid={error} custom>
          {options &&
            options.map((option, index) => (
              <option key={index} value={option.value}>{option.label}</option>
            ))}
        </CSelect>
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

export default RSelect;
