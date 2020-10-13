<template>
  <div style="width: 450px;margin: auto">
    <b-form style="margin: 0 auto"  @submit="" >
      <b-form-group
        id="input-group-1"
        label="Your name:"
        label-for="input-1">
        <b-form-input
          id="input-1"
          type="email"
          required
          placeholder="Enter email"
        ></b-form-input>
      </b-form-group>
      <b-form-group id="input-group-2" label="Description" label-for="input-2">
        <b-form-textarea
          id="input-2"
          required
          placeholder="Description"
        ></b-form-textarea>
      </b-form-group>
      <b-form-group  id="input-group-3" label="Price" label-for="input-3">
        <b-form-input
          id="input-3" type="number"
          required
          placeholder="Price"
        ></b-form-input>
      </b-form-group>
      <b-button type="submit" variant="primary">Update</b-button>
      <router-link :to="{name: 'MainPage'}">
        <b-button type="reset" variant="danger">Cancel</b-button>
      </router-link>
    </b-form>
  </div>
</template>

<script>
  export default {

  }
</script>

<style scoped>

</style>
