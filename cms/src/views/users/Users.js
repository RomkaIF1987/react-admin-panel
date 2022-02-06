import React, { useState, useEffect } from "react";
import { useLocation } from "react-router-dom";
import {
  CBadge,
  CCard,
  CCardBody,
  CCardHeader,
  CCol,
  CDataTable,
  CRow,
  CLink,
} from "@coreui/react";

import CIcon from "@coreui/icons-react";
import baseCRUDService from "../../services/baseCRUDService/baseCRUDService";

const getBadge = (status) => {
  switch (status) {
    case "Active":
      return "success";
    case "Inactive":
      return "secondary";
    case "Pending":
      return "warning";
    case "Banned":
      return "danger";
    default:
      return "primary";
  }
};

function Users() {
  const queryPage = useLocation().search.match(/page=([0-9]+)/, "");
  const currentPage = Number(queryPage && queryPage[1] ? queryPage[1] : 1);
  const [page, setPage] = useState(currentPage);
  const [users, setUsers] = useState([]);

  // eslint-disable-next-line react-hooks/exhaustive-deps
  useEffect(async () => {
    baseCRUDService.setApiUrl("/users");
    await baseCRUDService
      .getRecords()
      .then((response) => setUsers(response.users))
      .catch((error) => {
        console.log(error);
      });
  }, []);

  useEffect(() => {
    currentPage !== page && setPage(currentPage);
  }, [currentPage, page]);

  return (
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
            <div className="d-flex justify-content-between">
              <div className="d-flex align-items-center">Users</div>
              <div className="d-flex align-items-center col-sm-4 col-md-2 col-xl max-w-150px min-w-150px">
                <CLink
                  to="/users/create"
                  className="btn btn-outline-success btn-block"
                >
                  Add New User
                </CLink>
              </div>
            </div>
          </CCardHeader>
          <CCardBody>
            <CDataTable
              items={users}
              fields={[
                { key: "name", _classes: "font-weight-bold" },
                "email",
                "roles",
                "status",
                "action",
              ]}
              hover
              bordered
              size="sm"
              itemsPerPage={10}
              pagination
              scopedSlots={{
                // eslint-disable-next-line react/no-unstable-nested-components
                status: (item) => (
                  <td>
                    <CBadge color={getBadge(item.show)}>
                      {getBadge(item.show)}
                    </CBadge>
                  </td>
                ),
                // eslint-disable-next-line react/no-unstable-nested-components
                action: (item) => (
                  <td width="15%">
                    <div className="btn-group" role="group">
                      <a
                        href={`#/users/${item.id}`}
                        className="btn"
                        type="button"
                      >
                        <CIcon name="cil-pencil" className="mfe-2" />
                      </a>
                      <button className="btn" type="button">
                        <CIcon name="cil-trash" className="mfe-2" />
                      </button>
                    </div>
                  </td>
                ),
              }}
            />
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
  );
}

export default Users;
