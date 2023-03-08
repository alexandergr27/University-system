<template>
  <div class="title">
    <h2>{{ title }}</h2>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <td>Document</td>
        <td>Name</td>
        <td>Last Name</td>
        <td>Date of Birth</td>
        <td>Email</td>
        <td>Phone Number</td>
        <td>Address</td>
        <td>Is Active</td>
        <td>Options</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123456789</td>
        <td>John</td>
        <td>Doe</td>
        <td>1990-05-02</td>
        <td>johndoe@example.com</td>
        <td>1234567</td>
        <td>47 ST</td>
        <td>true</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  data() {
    return {
      title: "Student Management Component",
    };
  },
};
</script>