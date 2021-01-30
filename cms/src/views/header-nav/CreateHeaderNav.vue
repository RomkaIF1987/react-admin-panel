<template>
  <div>
    <CRow>
      <CCol col="6" lg="6">
        <CCard no-header>
          <CCardBody>
              <h3>
                Create Header Navigation Item
              </h3>
              <CAlert
                :show.sync="dismissCountDown"
                color="primary"
                fade
              >
                ({{dismissCountDown}}) {{ message }}
              </CAlert>
              <CInput
                label="Name"
                type="text"
                placeholder="Name"
                required
                v-model="headerNav.name"
              ></CInput>
              <CInput
                label="Route"
                type="text"
                placeholder="Route link"
                required
                v-model="headerNav.link_url"
              ></CInput>
              <CInputCheckbox
                label="Enable Edit button in table"
                value="true"
                :checked="true"
                v-model="headerNav.edit"
              />
              <CInputCheckbox
                label="Enable Show button in table"
                value="true"
                :checked="true"
                v-model="headerNav.show"
              />
              <CInputCheckbox
                label="Enable Delete button in table"
                value="true"
                :checked="true"
                v-model="headerNav.delete"
                class="mb-2"
              />
              <CButton class="mt-2" color="secondary" @click="marker=true">Back</CButton>
              <CButton class="mt-2" color="primary" @click="store()">Create</CButton>
          </CCardBody>
        </CCard>
      </CCol>
    </CRow>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'CreateHeaderNav',
  components:{
  },
  data: () => {
    return {
        message: '',
        dismissSecs: 7,
        dismissCountDown: 0,
        showDismissibleAlert: false,
        tableNameInDatabase: '',
        marker: true,
        headerNav: {
          name: '',
          link_url: '',
          edit: true,
          show: true,
          delete: true,
        },
        formFields: [],
        receiveFormFields: [],
        options: [],
        getData: false,
        rolesArray: [],
        roles: [],
    }
  },
  methods: {
    goBack() {
      this.$router.go(-1)
    },
    create(){
      let self = this
      let result = {
        name: self.headerNav.name,
        link_url: self.headerNav.link_url,
        edit: self.headerNav.edit,
        show: self.headerNav.show,
        delete: self.headerNav.delete
      }
      return result;
    },
    store(){
        let self = this;
        let postData = self.create();
        axios.post(  this.$apiAdress + '/api/header-nav?token=' + localStorage.getItem("api_token"),
            postData
        )
        .then(function (response) {
            self.marker = false
            self.$router.push({ path: '' + response.data.id });

        }).catch(function (error) {
            if(error.response.data.message == 'The given data was invalid.'){
              self.message = '';
              for (let key in error.response.data.errors) {
                if (error.response.data.errors.hasOwnProperty(key)) {
                  self.message += error.response.data.errors[key][0] + '  ';
                }
              }
              self.showAlert();
            }else{
              console.log(error);
              self.$router.push({ path: '/dashboard' });
            }
        });
    },
    countDownChanged (dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert () {
      this.dismissCountDown = this.dismissSecs
    },
  }
}

</script>

<style scoped>
.btn {
    margin:0 6px 6px 0;
}
</style>
