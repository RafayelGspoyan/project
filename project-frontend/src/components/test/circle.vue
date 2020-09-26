<template>
  <div>
    <div>
    <div class="circle" :style="style" @mousedown="startDrag" @mousemove="doDrag">
    </div>
    <div :style="block"></div>
    </div>
  </div>
</template>

<script>
  export default {
      data(){
        return{
            x: 50,
            y: 50,
          dragging: false
        }
      },
      methods:{
        testPromise(){
          return new Promise((resolve,reject) => {
              let success = true;
              setTimeout(() => {
                if(success){
                  resolve(1)
                }else{
                  reject("error")
                }
              },1000)
          })
        },
        startDrag() {
          this.dragging = true;
        },
        stopDrag() {

          this.dragging = false;
        },
        doDrag(event) {
          if (this.dragging === true) {
            this.x = event.clientX
            this.y = event.clientY
          }
        },
      },
    mounted() {
        this.axios.post("user").then(res => {
          console.log("sdiufijfjkj")
        })
      this.testPromise().then(res => {
        console.log(res)
      }).catch(err => {
        console.log(err)
      }).finally(() => {
        console.log("akl")
      })
      window.addEventListener('mouseup', this.stopDrag);
    },
    computed: {
      style() {
        return {
          left: `${this.x -50}px`,
          top: `${this.y - 50}px`,
          position: 'absolute',
        }
      },block() {
        return {
          width : '100px',
          height: '100px',
          "background-color": "red",
          margin: '150px'
        }
      }
    }
  }
</script>

<style scoped>
    .circle{
      width: 100px;
      height: 100px;
      border-radius: 50%;
      background-color: red;
      position: absolute;
    }

</style>
