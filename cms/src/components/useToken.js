import {useState} from 'react';

export default function useToken() {
  const getToken = () => {
    const tokenString = localStorage.getItem('token');
    return JSON.parse(tokenString)
  };

  const [token, setToken] = useState(getToken());

  const saveToken = userToken => {
    localStorage.setItem('token', JSON.stringify(userToken));
    setToken(userToken);
  };

  if (localStorage.getItem('token_expires') && localStorage.getItem('token_expires') < Date.now()) {
    localStorage.clear();
    window.location.href = '/';
  }

  return {
    setToken: saveToken,
    token
  }
}
