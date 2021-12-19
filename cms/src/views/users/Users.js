import React, { useState, useEffect } from 'react'
import { useLocation } from 'react-router-dom'
import {
  CBadge,
  CCard,
  CCardBody,
  CCardHeader,
  CCol,
  CDataTable,
  CRow,
  CLink
} from '@coreui/react'

import baseCRUDService from "../../services/baseCRUDService/baseCRUDService";
import CIcon from "@coreui/icons-react";

const getBadge = status => {
  switch (status) {
    case 'Active': return 'success'
    case 'Inactive': return 'secondary'
    case 'Pending': return 'warning'
    case 'Banned': return 'danger'
    default: return 'primary'
  }
}

const Users = () => {
  const queryPage = useLocation().search.match(/page=([0-9]+)/, '');
  const currentPage = Number(queryPage && queryPage[1] ? queryPage[1] : 1);
  const [page, setPage] = useState(currentPage);
  const [users, setUsers] = useState([]);

  useEffect(async () => {
    baseCRUDService.setApiUrl('/users');
    await baseCRUDService.getRecords()
      .then(response => setUsers(response.users))
      .catch((error) => {
        console.log(error);
      });
  }, []);

  useEffect(() => {
    currentPage !== page && setPage(currentPage)
  }, [currentPage, page])

  const styles = {
    button: {
      width: '150px',
      float: 'right'
    }
  }

  return (
    <CRow>
      <CCol>
        <CCard>
          <CCardHeader>
            Users
            <div className="mb-3 mb-xl-0 col-sm-4 col-md-2 col-xl" style={styles.button}>
              <CLink to='/site/header-navigation/create'
                     className="btn btn-outline-success btn-block">Add New User</CLink>
            </div>
          </CCardHeader>
          <CCardBody>
            <CDataTable
              items={users}
              fields={[
                { key: 'name', _classes: 'font-weight-bold' },
                'email', 'roles', 'status', 'action'
              ]}
              hover
              striped
              bordered
              size="sm"
              itemsPerPage={10}
              pagination
              scopedSlots={{
                'status':
                  (item) => (
                    <td>
                      <CBadge color={getBadge(item.show)}>
                        {getBadge(item.show)}
                      </CBadge>
                    </td>
                  ),
                'action':
                  (item) => (
                    <td width={"15%"}>
                      <div className="btn-group" role="group">
                        <a href={process.env.REACT_APP_API_URL + '/header-nav/' + item.id}
                           className="btn" type="button"><CIcon name="cil-pencil" className="mfe-2"/></a>
                        <button className="btn" type="button"><CIcon name="cil-trash" className="mfe-2"/></button>
                      </div>
                    </td>
                  ),
              }}
            />
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
  )
}

export default Users
