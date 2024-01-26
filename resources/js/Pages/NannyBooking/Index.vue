<template>
    <div class="container mt-5">
      <h1>Nanny Bookings</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>User Name</th>
            <th>User Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="booking in nannyBookings" :key="booking.id">
            <td>{{ booking.id }}</td>
            <td>{{ booking.title }}</td>
            <td>{{ booking.price }}</td>
            <td>{{ formatDateTime(booking.start_date_time) }}</td>
            <td>{{ formatDateTime(booking.end_date_time) }}</td>
            <td>{{ booking.user.name }}</td>
            <td>{{ booking.user.email }}</td>
          </tr>
        </tbody>
      </table>
    </div>
</template>
  
<script>
  export default {
    props: {
      nannyBookings: Array,
    },
    methods: {
      formatDateTime(dateTime) {
        const options = { year: 'numeric', month: 'short', day: 'numeric', hour: 'numeric', minute: 'numeric', hour12: true };
        return new Date(dateTime).toLocaleString('en-US', options);
      },
    },
  };
</script>
  