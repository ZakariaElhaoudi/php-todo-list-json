<script>
import axios from 'axios'
export default {
  name: "MainApp",
  data() {
    return {
      elements: [],
      newElement: "",
    }

  },
  methods: {


    onSubmit() {

      const url = 'http://localhost/esercizio_php-todo-list-json_22_06_2023/php-todo-list-json/back_end/newElement.php';
      const data = { value: this.newElement };
      const headers = {
        headers: { 'Content-Type': 'multipart/form-data' }
      };
      axios.post(url, data, headers)
        .then(response => {
          this.newElement = response.data;

          this.newElement = "";
        })
        .catch(error => console.error("error", error));

      axios.get('http://localhost/esercizio_php-todo-list-json_22_06_2023/php-todo-list-json/back_end/index.php')
        .then(response => {
          this.elements = response.data;
        }).catch(error => console.error("error", error));

    }

  },
  // mounted() {

  //   axios.get('http://localhost/esercizio_php-todo-list-json_22_06_2023/php-todo-list-json/back_end/index.php')
  //     .then(response => {
  //       this.elements = response.data;
  //     }).catch(error => console.error("error", error));
  // }
}

</script>



<template>
  <div class="container_fluid bg-dark ">
    <div class="container text-center">
      <h1 style="color: #6d757d ;">Todo List</h1>
      <div class="card bg ">
        <div class="card-body">
          <ul>
            <li v-for="(element, index) in elements" :key="index">
              {{ element }}
            </li>
          </ul>
        </div>
        <div class="card-footer">
          <form @submit.prevent="onSubmit">
            <input type="text" name="element" placeholder="Inserisci nuovo elemento" v-model="newElement">
            <input type="submit" value="Create New Element">
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<style></style>
