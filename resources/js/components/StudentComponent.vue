<template>
  <div class="title">
    <h4 style="margin-top: 32px;">{{ title }}</h4>
  </div>
  <table class="table table-bordered table-striped" style="margin-top: 16px;">
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
      <tr v-for="student in students">
        <td>{{ student.document }}</td>
        <td>{{ student.name }}</td>
        <td>{{ student.last_name }}</td>
        <td>{{ student.date_birth }}</td>
        <td>{{ student.email }}</td>
        <td>{{ student.phone_number }}</td>
        <td>{{ student.address }}</td>
        <td>{{ student.is_active }}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      title: "List of Students",
      students: []
    };
  },
  created() {
    this.getStudents()
  },
  methods: {
    getStudents() {
      axios.get("http://localhost:8000/api/students").then((response) => {
        this.students = response.data
        console.log(this.students)
      })
    }
  }
};
</script>