<template>
  <div class="active-list">
      <input  type="text" :placeholder="placeHolderSelect"  :class="classItemsGroup" class="form-control"
             v-model="selection"
              @input="change"
              @keydown.down="down"
              @keyup.up="up"
              :onclick="down"
              @keypress.enter="enter">

    <ul v-if="viewList"  >
      <li @click="selecctionItems(index)"
          :class="{ 'active' : isActive(index) }"
          v-for="(item, index) of results" :key="index">{{ item.label }}
      </li>
    </ul>

  </div>
</template>

<script>

export default {
  props: {
    items: {
      type: Array,
      required: true,
    },
    multiple: {
      type: String,
      required: false
    },
    placeHolderSelect: {
      type: String,
      required: false
    },
    classItemsGroup: {
      type: String,
      required: false
    },
    ifClassGroup: {
      type: String,
      required: false
    },
    searchRoles: {
      type: String,
      required: false
    },
    icon:{
      type:Boolean,
      required:false,
      default:true
    }
  },
  data() {
    return {
      selection: "",
      viewList: false,
      nowList: 0,
      MultIds:[],
      ids:''
    }
  },
  mounted() {
    console.log(this.selection);
  },
  computed: {
    results() {

     return  this.items.filter(m => {
            return   m.label.toLowerCase().includes(this.selection.toLowerCase())
      });

    }
  },filter:{

  },
  methods: {

    change() {
      if (!this.viewList) {
        this.viewList = true;
      } else {
        this.viewList = false;
      }
    },
    selecctionItems(index) {
        const id = this.valueSelect(index)
      this.$emit('seleccionado',id );
      const select = this.results[index];
      this.selection = select.label;
      this.viewList = false;
      return select;
    },
    down() {
      this.viewList = true;
      if (this.nowList < this.results.length - 1) {
        this.nowList++;
      }

    },
    up() {
      if (this.nowList > 0) {
        this.nowList--;
      }
    }, enter() {
      const id = this.valueSelect(this.nowList)
      this.$emit('seleccionado',id );
      const select = this.results[this.nowList];
      this.selection = select.label;
      this.viewList = false;
      return select;
    },searchContent() {
      const id = this.valueSelect(this.nowList)
      this.$emit('seleccionado',id );
      const select = this.results[this.nowList];
      console.log(this.selection)
     this.selection = select.label;
      this.viewList = false;

    },
    isActive(index) {
      return index === this.nowList;
    },
    valueSelect(index){
      if(this.multiple === 'multiple'){
        this.MultIds.push(this.results[index].value)
      return this.MultIds;
      }else{
        this.ids = this.results[index].value
        return this.ids;
      }

    }
  }
}
</script>

<style scoped>
.active {
  text-decoration: underline;
  background-color: #66afe9;
  color: #ffffff;
}
.active-list{
  z-index: 1000;
  position: relative;
}

ul {
  list-style: none;
  border-color: #66afe9;
  position: absolute;
  background-color: white;
  left: 0;
    width: 100%;
    top: 35px;
    min-height: 100%;
    padding: 6px;
  outline: 0;
  z-index: 11000;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
  0 0 8px rgba(102, 175, 233, .60);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.75),
  0 0 8px rgba(102, 175, 233, .60);
  max-height: 400px;
  overflow-y: auto;
}

li {
  font-size: 14px;
  font-family: 'Montserrat', sans-serif;
  padding: 5px 6px;
  text-align: left;
}

li:hover {
  background-color: #66afe9;
  color: #ffffff;
  cursor: pointer;
  padding: 5px 6px;
}
span{
  padding: 8px;
}


.inputWithIcon {
  position: relative;
}

.inputWithIcon i {
  position: absolute;
  right: 10px;
  top: 5px;
  padding: 9px 8px;
  color: #555;
  font-weight: bold;
  transition: 0.3s;
}



</style>
