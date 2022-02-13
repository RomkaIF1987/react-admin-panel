import React, { forwardRef } from "react";
import { CSwitch, CLabel } from "@coreui/react";

const RToggle = forwardRef(
  ({ className = "", label, id, color = "dark", ...props }, ref) => {
    return (
      <div className="d-flex flex-column justify-content-flex-start">
        <CLabel className="pr-3" htmlFor={id}>
          {label}
        </CLabel>
        <div className="d-flex switch-input">
          <CSwitch {...props} color={color} variant="3d" />
          <span className="pl-3">{props.value ? "Active" : "Inactive"}</span>
        </div>
      </div>
    );
  }
);

export default RToggle;
