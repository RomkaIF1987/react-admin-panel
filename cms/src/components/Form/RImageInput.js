import React, { forwardRef, useEffect, useState } from "react";
import { CInput, CLabel, CFormText, CImg } from "@coreui/react";

const RImageInput = forwardRef(
  (
    {
      className = "",
      label,
      value,
      onChange,
      id,
      type = "file",
      helperBlock = false,
      error = false,
      helperText = "",
      errorText = "",
      ...props
    },
    ref
  ) => {
    const [previewImage, setPreviewImage] = useState(null);
    const [fileName, setFileName] = useState("");
    const [fileOld, setFileOld] = useState("");

    useEffect(() => {
      if (value && value.file && typeof value.file === "string") {
        setPreviewImage(value.file);
      } else {
        setPreviewImage(null);
      }
      if (value && value.fileName && typeof value.fileName === "string") {
        setFileName(value.fileName);
      } else {
        setFileName("");
      }
      if (value && value.fileOld && typeof value.fileOld === "string") {
        setFileOld(value.fileOld);
      } else {
        setFileOld("");
      }
    }, [value]);

    const handleClear = () => {
      handleChange(null);
    };

    const handleChange = (e) => {
      const files = e?.target?.files || e?.dataTransfer?.files || [];
      let newFileName = "";
      let file = null;
      if (files.length) {
        [file] = files;
        newFileName = file.name;
      }

      const reader = new FileReader();
      if (file) {
        reader.readAsDataURL(file);
        reader.onload = (rEvent) => {
          setPreviewImage(rEvent.target.result);
          setFileName(newFileName);
        };
      }
      onChange(
        e
          ? {
              file,
              fileName: newFileName,
              fileOld: file ? fileOld : "",
            }
          : null
      );
    };

    return (
      <>
        <CLabel htmlFor={id}>{label}</CLabel>
        <div className="d-flex">
          <div className="c-avatar">
            <CImg
              src={previewImage || "/avatars/default_avatar.png"}
              className="c-avatar-img"
              alt="avatar"
            />
          </div>
          <CInput
            {...props}
            type={type}
            id={id}
            invalid={error}
            className="ml-2"
            onChange={handleChange}
            // value={fileName}
          />
        </div>
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

export default RImageInput;
