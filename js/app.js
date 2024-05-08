const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!'
      }
    },
    methods: {
        fetchData(){
            //usare Axios per recuperare i dati
        }
    },
  }).mount('#app')