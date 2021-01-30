import { useState } from 'react';

export default function useToken() {
  const getToken = () => {
    const tokenString = localStorage.getItem('token');
    return JSON.parse(tokenString)
  };

  const [token, setToken] = useState(getToken());

  const saveToken = userToken => {
    localStorage.setItem('token', JSON.stringify(userToken.access_token));
    localStorage.setItem('roles', JSON.stringify(userToken.roles));
    setToken(userToken);
  };

  return {
    setToken: saveToken,
    token
  }
}
