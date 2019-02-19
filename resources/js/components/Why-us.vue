<template>
        <div class="container">
        <header class="section-header">
          <h3>Curiculum</h3>
        </header>
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-4 mb-4" v-for="titulo in titulos" :key="titulo.id">
            <div class="card wow bounceInUp">
                <i class="fa fa-graduation-cap"></i>
              <div class="card-body">
                <h5 class="card-title" v-text="titulo.nombre"></h5>
                <p class="card-text" v-text="titulo.institucion">.</p>
                <a class="readmore" v-text="titulo.año"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4" v-for="curso in cursos" :key="curso.id">
            <div class="card wow bounceInUp">
                <i class="fa fa-graduation-cap"></i>
              <div class="card-body">
                <h5 class="card-title" v-text="curso.nombre"></h5>
                <p class="card-text" v-text="curso.institucion">.</p>
                <a class="readmore" v-text="curso.año"></a>
              </div>
            </div>
          </div>
        </div>
        <header class="section-header">
          <h3 class="text">Experiencia</h3>
        </header>
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-6 mb-4" v-for="experiencia in experiencias" :key="experiencia.id">
            <div class="card wow bounceInUp">
                <i class="fa fa-graduation-cap"></i>
              <div class="card-body">
                <h5 class="card-title" v-text="experiencia.cargo"></h5>
                <p class="card-text" v-text="experiencia.institucion">.</p>
                <p class="card-text" v-text="experiencia.empresa"></p>
                <p class="card-text" v-text="experiencia.fecha_inicio+' a '+experiencia.fecha_final"></p>
                <p class="card-text" v-text="experiencia.descripcion"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
</template>
<script>
    export default {
      data() {
        return {
          //experiencia profesional
          experiencias:[],
          //titulos profesionales
          titulos:[],
          cursos:[]
          
        }
        
      },
      methods: {
        listarTitulos(){
          let me=this;
          var url= '/t';
          axios.get(url).then(function (response) {
            // handle success
            console.log(response);
            //metemos los datos de categoria en el arrayCategoria
            me.titulos = response.data;
            })
            .catch(function (error) {
              console.log(error);
            })
            .then(function () {
            });
        },
        listarCursos(){
          let me=this;
          var url= '/cursos';
          axios.get(url).then(function (response) {
            // handle success
            console.log(response);
            //metemos los datos de categoria en el arrayCategoria
            me.cursos = response.data;
            })
            .catch(function (error) {
              console.log(error);
            })
            .then(function () {
            });
        },
        listarExperiencia(){
          let me=this;
          var url= '/exp';
          axios.get(url).then(function (response) {
            // handle success
            console.log(response);
            //metemos los datos de categoria en el arrayCategoria
            me.experiencias = response.data;
            })
            .catch(function (error) {
              console.log(error);
            })
            .then(function () {
            });
        }      
      },
      mounted() {
        this.listarExperiencia();
        this.listarTitulos();
        this.listarCursos();
        console.log('Component mounted.')
      }
    }
</script>
