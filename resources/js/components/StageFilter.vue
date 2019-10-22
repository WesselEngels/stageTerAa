<template>
  <nav class="navbar navbar-expand-sm bg-dark text-light">
    <div id="navbar" class="form-group row">
      <label for="education_id">Education</label>
      <select class="form-control">
        <option>select</option>
<option v-for="optie in options" :key="optie.value"></option>
</select >
    </div>
  </nav>
</template>

<script>
export default {
  name: 'StageFilter'
}


new Vue({
    el: '#navbar',
    data: {
        selected: 'A',
        options: [
            { text: 'One', value: 'A' },
            { text: 'Two', value: 'B' },
            { text: 'Three', value: 'C' }
        ]
    }
})
</script>

<style lang="css">
</style>