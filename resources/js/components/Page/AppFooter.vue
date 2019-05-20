<template>
    <v-footer
        height="auto"
        color="amber accent-4"
        >
        <v-layout
            justify-center
            row
            wrap
            >
            <v-btn
                v-for="link in links"
                :key="link"
                color="white"
                flat
                >
                {{ link }}
            </v-btn>
            <v-flex
                amber accent-3
                py-3
                text-xs-center
                white--black
                xs12
                >
                &copy;2018 — <strong>GPLogics</strong>
            </v-flex>
        </v-layout>
    </v-footer>
</template>

<script>
	export default{
		data(){
			return{
				links: [
				    'Torneos',
				    'Nosotros',
				    'Estadísticas',
				    'Fantasy Sports',
				    'Blog'
				]
			}
		}
	};
</script>