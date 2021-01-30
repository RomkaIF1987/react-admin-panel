<template>
  <CRow>
    <CCol col="12" xl="12">
      <transition name="slide">
      <CCard>
        <CCardBody>
            <h4>Header Navigation Items</h4>
            <CButton color="primary" @click="createHeaderNav()">Create Navigation</CButton>
            <CAlert
              :show.sync="dismissCountDown"
              color="primary"
              fade
            >
              ({{dismissCountDown}}) {{ message }}
            </CAlert>
            <CDataTable
              hover
              :items="items"
              :fields="fields"
              :items-per-page="10"
              pagination
            >
              <template #name="{item}">
                <td width="30%">
                  <strong>{{item.name}}</strong>
                </td>
              </template>
                <template #link="{item}">
                <td width="40%">
                  <strong>{{item.link_url}}</strong>
                </td>
              </template>
              <template #show="{item}">
                <td>
                  <CButton color="primary" @click="showBread( item.id )">Show</CButton>
                </td>
              </template>
              <template #edit="{item}">
                <td>
                  <CButton color="primary" @click="editBread( item.id )">Edit</CButton>
                </td>
              </template>
              <template #delete="{item}">
                <td>
                  <CButton color="danger" @click="deleteBread( item.id )">Delete</CButton>
                </td>
              </template>
            </CDataTable>
        </CCardBody>
      </CCard>
      </transition>
    </CCol>
  </CRow>
</template>

<script>
import axios from 'axios'

export default {
  name: 'MenuItems',
  data: () => {
    return {
      items: [],
      fields: ['name', 'link_url', 'show', 'edit', 'delete'],
      currentPage: 1,
      perPage: 5,
      totalRows: 0,
      message: '',
      showMessage: false,
      dismissSecs: 7,
      dismissCountDown: 0,
      showDismissibleAlert: false
    }
  },
  computed: {
  },
  methods: {
    headerNavLink (id) {
      return `header-nav/${id.toString()}`
    },
    editHeaderNavLink (id) {
      return `header-nav/${id.toString()}/edit`
    },
    showHeaderNav ( id ) {
      const headerNavLink = this.headerNavLink( id )
      this.$router.push({path: headerNavLink})
    },
    editHeaderNav ( id ) {
      const editHeaderNavLink = this.editHeaderNavLink( id )
      this.$router.push({path: editHeaderNavLink})
    },
    deleteHeaderNav ( id ) {
      const deleteHeaderNavLink = `header-nav/${id.toString()}/delete`
      this.$router.push({path: deleteHeaderNavLink})
    },
    createHeaderNav () {
      this.$router.push({path: 'header-nav/create'})
    },
    countDownChanged (dismissCountDown) {
      this.dismissCountDown = dismissCountDown
    },
    showAlert () {
      this.dismissCountDown = this.dismissSecs
    },
    getHeaderNavs (){
      let self = this;
      axios.get(  this.$apiAdress + '/api/header-nav?token=' + localStorage.getItem("api_token") )
      .then(function (response) {
        self.items = response.data;
      }).catch(function (error) {
        console.log(error);
        self.$router.push({ path: '/login' });
      });
    }
  },
  mounted: function(){
    this.getHeaderNavs();
  }
}
</script>

<style scoped>
.card-body >>> table > tbody > tr > td {
  cursor: pointer;
}
 .btn {
     margin:0 6px 6px 0;
 }
</style>
