<template>
 <v-content>
   <v-container>
    <v-row dense

     justify="space-around"

    >
         <v-col cols="3.5"
          style="margin-top: -180px;margin-right: 10px;"
         >

               <v-card
               color="#385F73"
               dark
                >
                  <v-card-title class="headline">1Unlimited music now</v-card-title>

                 <v-card-subtitle>Listen to your favorite artists and albums whenever and wherever, online and offline.</v-card-subtitle>

                  <v-card-actions>
                    <v-btn text>Listen Now</v-btn>
                  </v-card-actions>
                </v-card>

         </v-col>

          <v-col cols="3.5"
          style="margin-top: -180px;margin-right: 10px;"
          >

               <v-card
                color="#385F73"
                dark
               >
                 <v-card-title class="headline">2Unlimited music now</v-card-title>

                 <v-card-subtitle>Listen to your favorite artists and albums whenever and wherever, online and offline.</v-card-subtitle>

                 <v-card-actions>
                   <v-btn text>Listen Now</v-btn>
                 </v-card-actions>
                </v-card>

             </v-col>

             <v-col cols="3.5"
             style="margin-top: -180px;margin-right: 10px;"
             >

                <v-card
                 color="#385F73"
                 dark
                 >
                   <v-card-title class="headline">3Unlimited music now</v-card-title>

                  <v-card-subtitle>Listen to your favorite artists and albums whenever and wherever, online and offline.</v-card-subtitle>

                  <v-card-actions>
                   <v-btn text>Listen Now</v-btn>
                  </v-card-actions>
                </v-card>

             </v-col>
   <v-col cols="8"

   style="margin-left: 80px;margin-top: 30px;"
   >
       <v-row
        align="strech">
           <v-card
            color="#385F73"
            dark
          >
            <v-card-title class="headline">4Unlimited music now</v-card-title>

            <v-card-subtitle>Listen to your favorite artists and albums whenever and wherever, online and offline.</v-card-subtitle>

            <v-card-actions>
              <v-btn text>Listen Now</v-btn>
            </v-card-actions>
          </v-card>
         </v-row>
        </v-col>
        </v-row>


    </v-container>
            </v-content>
</template>

<script>
export default {
    data:()=>({
   items: [
        {
          color: '#1F7087',
          src: 'https://cdn.vuetifyjs.com/images/cards/foster.jpg',
          title: 'Supermodel',
          artist: 'Foster the People',
        },
        {
          color: '#952175',
          src: 'https://cdn.vuetifyjs.com/images/cards/halcyon.png',
          title: 'Halcyon Days',
          artist: 'Ellie Goulding',
        },
      ],
})
}
</script>

<style>

</style>
