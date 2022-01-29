import http from '../../http-common';

class BaseCRUDService {
  apiUrl = '';

  constructor(apiUrl = '') {
    this.apiUrl = apiUrl;
    const rzapInfo = JSON.parse(localStorage.getItem('rzapInfo'));
    this.token = rzapInfo?.token;
    this.headers = {headers: {"Authorization" : `Bearer ${this.token}`}}
  }

  getApiUrl() {
    return this.apiUrl;
  }

  getHeaders() {
    return this.headers;
  }

  setApiUrl(apiUrl = '') {
    this.apiUrl = apiUrl;
  }

  getRecords(params = {}) {
    return new Promise((resolve, reject) => {
      http
        .get(this.getApiUrl(), Object.assign(this.getHeaders(), params))
        .then(response => {
          if (response.data) {
            resolve(response.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  getRecord(recordId) {
    return new Promise((resolve, reject) => {
      http
        .get(`${this.getApiUrl()}/${recordId}`)
        .then(response => {
          if (response?.data) {
            resolve(response.data.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  getRecordWithoutId() {
    return new Promise((resolve, reject) => {
      http
        .get(`${this.getApiUrl()}`)
        .then(response => {
          if (response?.data) {
            resolve(response.data.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  storeRecord(data) {
    return new Promise((resolve, reject) => {
      http
        .post(`${this.getApiUrl()}`, data)
        .then(response => {
          if (response.data) {
            resolve(response.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  updateRecord(data, recordId) {
    return new Promise((resolve, reject) => {
      let method = 'put';
      if (data instanceof FormData) {
        data.append('_method', 'PUT');
        method = 'post';
      }
      http[method](`${this.getApiUrl()}/${recordId}`, data)
        .then(response => {
          if (response) {
            resolve(response.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  updateRecordWithoutId(data) {
    return new Promise((resolve, reject) => {
      let method = 'put';
      if (data instanceof FormData) {
        data.append('_method', 'PUT');
        method = 'post';
      }
      http[method](`${this.getApiUrl()}`, data)
        .then(response => {
          if (response) {
            resolve(response.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  updateRecordStatus(data, recordId) {
    return new Promise((resolve, reject) => {
      const method = 'put';
      http[method](`${this.getApiUrl()}/${recordId}/status`, data)
        .then(response => {
          if (response?.data?.data) {
            resolve(response.data.data);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  deleteRecord(recordId) {
    return new Promise((resolve, reject) => {
      http
        .delete(`${this.getApiUrl()}/${recordId}`)
        .then(response => {
          if (response) {
            resolve(response);
          } else {
            reject(response.data.error);
          }
        })
        .catch(error => {
          if (error.response && error.response.data) {
            reject(error.response.data);
          } else {
            reject(error);
          }
        });
    });
  }

  buildFormData(formData, data, parentKey) {
    if (data && typeof data === 'object' && !(data instanceof Date) && !(data instanceof File)) {
      Object.keys(data).forEach(key => {
        this.buildFormData(formData, data[key], parentKey ? `${parentKey}[${key}]` : key);
      });
    } else {
      const value = data == null ? '' : data;
      formData.append(parentKey, value);
    }
    return formData;
  }
}

export default new BaseCRUDService();
export { BaseCRUDService };
