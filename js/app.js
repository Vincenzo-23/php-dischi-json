const { createApp } = Vue

  createApp({
    data() {
      return {
        cds: [],
      }
    },
    methods: {
        fetchData(){
            //usare Axios per recuperare i dati
            axios.get('./server.php').then(res => {
                this.cds = res.data.results
            })
        }
    },
    created(){
        this.fetchData()
    }
  }).mount('#app')