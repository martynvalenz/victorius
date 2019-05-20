<template>
    <v-parallax
        dark
        src="/images/slider/tocho banner.jpg" height="650"
        >
        <v-layout
            align-center
            column
            justify-center
            >
            

            <v-layout justify-center align-center>
                <v-flex xs12 sm12>
                    <v-card style="background-color: rgba(204, 204, 204, 0.5)">
                        <v-card-text style="text-align: center">
                            <h1 class="display-1 font-weight-thin mb-3" style="text-shadow: 1px 1px 1px #666; font-size: 50px">Bienvenido a Victorius</h1>
                            <h4 class="subheading" style="text-shadow: 1px 1px 1px #666;">Flag Football / Soccer</h4>
                            <v-btn
                            class="mx-0 router-linker font-weight-bold"
                            color="amber accent-3"
                            dark
                            large
                            
                            >
                                Ver Más
                            </v-btn>
                            <v-btn
                            class="mx-0 router-linker font-weight-bold"
                            color="amber accent-4"
                            dark
                            large
                            
                            >
                                Registro <i class="fas fa-user-plus" style="padding-left: .5em"></i>
                            </v-btn>
                            <v-btn class="mx-0 router-linker font-weight-bold" dark large color="black" @click="$vuetify.goTo('#contacto')">Contacto</v-btn>
                        </v-card-text>

                        <v-card-actions>
                            
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>

            <div>
                
            </div>
        </v-layout>
    </v-parallax>
</template>

<script>
    
</script>