<template>
<v-content>

  <v-card
   style="margin-top: -190px;margin-left: 25px;margin-right: 25px;margin-bottom: 45px; "
  >
    <v-card-title>
      LabTest
      <v-spacer></v-spacer>
      <v-text-field
        v-model="search"
        append-icon="mdi-magnify"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
    </v-card-title>
    <v-data-table
      :headers="headers"
      :items="pharmacies"
      :search="search"
    >
 <template>
   <div
   v-for="pharmacy in pharmacies"
     v-bind:key="pharmacy.id"
     :data=pharmacy
     >
      <td >{{ pharmacy.test }}</td>
      <td >{{ pharmacy.results }}</td>
      <td >{{ pharmacy.conducted_by }}</td>
      <td >{{ pharmacy.created_at }}</td>
     </div>
      </template>
       <template v-slot:item.actions="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
    </v-data-table>
  </v-card>

</v-content>
</template>


<script>
export default {
     props: ['data']
    ,
    created(){
        axios.get('/api/lab_test')
        .then(res => this.pharmacies =res.data.data)
        .catch(error => console.log(error.response.data))
    },

    data(){
        return{
             search: '',
         headers: [
          {
            text: 'Test',
            align: 'start',
            sortable: false,
            value: 'test',
          },
          { text: 'Results', value: 'results' },
          { text: 'Conducted_by', value: 'conducted_by' },
          { text: 'Created_at', value: 'created_at' },
          { text: 'Actions',value:'actions',sortable:false }
        ],
        pharmacies:[

        ],

        } }
    }
</script>
