<template>
    <form @submit.prevent="applyFilters">
      <div class="mb-3">
        <label for="filter_value">Filter:</label>
        <input v-model="filter_value" type="text" class="form-control" id="filter_value" placeholder="Title, Price, User Name, User Email">
      </div>
      <div class="d-flex">
        <button type="submit" class="btn btn-primary me-2">Apply Filters</button>
        <button type="button" class="btn btn-secondary" @click="resetFilters">Reset Filters</button>
      </div>
    </form>
</template>
  
<script>
  export default {
    data() {
      return {
        filter_value: '',
      };
    },
    methods: {
      applyFilters() {
        this.$emit('apply-filters', this.filter_value);
      },
      resetFilters() {
        this.filter_value = '';
        this.$emit('reset-filters');
      },
    },
  };
</script>
  