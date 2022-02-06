import axios from "axios";

export const baseURL = process.env.REACT_APP_API_BASE_URL || "";
export const baseApiURL = baseURL ? `${baseURL}/api` : "";
const rzapInfo = JSON.parse(localStorage.getItem("rzapInfo"));
const token = rzapInfo?.token;

const instance = axios.create({
  baseURL: baseApiURL,
  timeout: process.env.REACT_APP_API_REQUEST_TIMEOUT || 30000,
  headers: {
    Authorization: `Bearer ${token}`,
    "Content-Type": "application/json",
  },
});

export default instance;
