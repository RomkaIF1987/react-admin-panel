import http from "../../../http-common";
import { BaseCRUDService } from "../../../services/baseCRUDService/baseCRUDService";

class UsersService extends BaseCRUDService {
  constructor(apiUrl = "/users") {
    super(apiUrl);
  }

  // eslint-disable-next-line class-methods-use-this
  getRoles() {
    return new Promise((resolve, reject) => {
      http
        .get(`/roles`)
        .then((response) => {
          if (response) {
            resolve(response.data.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch((error) => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  // eslint-disable-next-line class-methods-use-this
  getUser({ id }) {
    return new Promise((resolve, reject) => {
      http
        .get(`/users/${id}`)
        .then((response) => {
          if (response) {
            resolve(response.data.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch((error) => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }
}

export default new UsersService();
export { UsersService };
