import React from 'react'
import {
  CDropdown,
  CDropdownItem,
  CDropdownMenu,
  CDropdownToggle,
  CImg
} from '@coreui/react'
import CIcon from '@coreui/icons-react'

function logout() {
  localStorage.removeItem('rzapInfo');
  window.location.href = '/';
}

function TheHeaderDropdown() {
  const rzapInfo = JSON.parse(localStorage.getItem('rzapInfo'));
  const name = rzapInfo?.name || '';

  return (
    <CDropdown
      inNav
      className="c-header-nav-items mx-2"
      direction="down"
    >
      <CDropdownToggle className="c-header-nav-link" caret={false}>
        <div className='p-3'>Hi {name}</div>
        <div className="c-avatar">
          <CImg
            src={'/avatars/default_avatar.png'}
            className="c-avatar-img"
            alt="avatar"
          />
        </div>
      </CDropdownToggle>
      <CDropdownMenu className="pt-0" placement="bottom-end">
        <CDropdownItem
          header
          tag="div"
          color="light"
          className="text-center"
        >
          <strong>Account</strong>
        </CDropdownItem>
        <CDropdownItem>
          <CIcon name="cil-bell" className="mfe-2"/>
          Profile
        </CDropdownItem>
        <CDropdownItem divider/>
        <CDropdownItem onClick={logout}>
          <CIcon name="cil-lock-locked" className="mfe-2"/>
          Lock Account
        </CDropdownItem>
      </CDropdownMenu>
    </CDropdown>
  )
}

export default TheHeaderDropdown
