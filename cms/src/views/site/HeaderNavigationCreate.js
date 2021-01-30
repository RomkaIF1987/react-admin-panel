import React, {useEffect} from "react";
import {
  CBadge,
  CCard,
  CCardBody,
  CCardHeader,
  CCol,
  CDataTable,
  CRow
} from '@coreui/react'

const getBadge = status => {
  switch (status) {
    case 0: return 'inactive'
    default: return 'active'
  }
}
const fields = ['name','link_url', 'status', 'action']

const Tables = () => {

  const [headerNavs, setHeaderNavs] = React.useState([])

  useEffect(() => {
    fetch('http://react-admin.loc/api/header-nav')
      .then(response => response.json())
      .then(headerNavs => setHeaderNavs(headerNavs))
  }, [])

  return (
    <>
      <CRow>
        <CCol>
          <CCard>
            <CCardHeader>
              Combined All Table
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
                scopedSlots = {{
                  'status':
                    (item)=>(
                      <td>
                        <CBadge color={getBadge(item.show)}>
                          {getBadge(item.show)}
                        </CBadge>
                      </td>
                    ),
                  'action':
                    (item)=>(
                      <td width={"15%"}>
                        <div className="btn-group" role="group">
                          <a href={'http://react-admin.loc/api/header-nav/' + item.id} className="btn btn-primary" type="button">Edit</a>
                          <button className="btn btn-danger" type="button">Delete</button>
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
