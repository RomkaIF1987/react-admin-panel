import {useState} from 'react';

export default function useToken() {
  const getToken = () => {
    const rzapInfo = JSON.parse(localStorage.getItem('rzapInfo'));
    return rzapInfo?.token;
  };

  const [token, setToken] = useState(getToken());
  let rzapInfo = JSON.parse(localStorage.getItem('rzapInfo'));

  const saveToken = userToken => {
    if (rzapInfo) {
      rzapInfo = {...rzapInfo, token: userToken}
    } else {
      rzapInfo = {token: userToken}
    }
    localStorage.setItem('rzapInfo', JSON.stringify(rzapInfo));
    setToken(userToken);
  };

  if (rzapInfo?.tokenExpires && rzapInfo.tokenExpires < Date.now()) {
    localStorage.removeItem('rzapInfo');
    window.location.href = '/';
  }

  return {
    setToken: saveToken,
    token
  }
}
