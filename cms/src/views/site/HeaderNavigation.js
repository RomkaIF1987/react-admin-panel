import React, {useEffect, useState} from "react";
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
import CIcon from '@coreui/icons-react'
import baseCRUDService from "../../services/baseCRUDService";

const getBadge = status => {
  switch (status) {
    case 0:
      return 'inactive'
    default:
      return 'active'
  }
}
const fields = ['name', 'link_url', 'status', 'action']

const Tables = (props) => {
  const [headerNavs, setHeaderNavs] = useState([])

  // eslint-disable-next-line react-hooks/exhaustive-deps
  useEffect(async () => {
    baseCRUDService.setApiUrl('/header-nav');
    await baseCRUDService.getRecords()
      .then(headerNavs => setHeaderNavs(headerNavs))
      .catch((error) => {
        console.log(error);
      });
  }, []);

  const styles = {
    button: {
      width: '150px',
      float: 'right'
    }
  }

  return (
    <>
      <CRow>
        <CCol>
          <CCard>
            <CCardHeader>
              Headers
              <div className="mb-3 mb-xl-0 col-sm-4 col-md-2 col-xl" style={styles.button}>
                <CLink to='/site/header-navigation/create'
                       className="btn btn-outline-success btn-block">Add New Link</CLink>
              </div>
            </CCardHeader>
            <CCardBody>
              <CDataTable
                items={headerNavs}
                fields={fields}
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
    </>
  )
}

export default Tables
