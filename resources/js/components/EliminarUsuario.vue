<template>
    <button
        class="px-1 text-red-500 hover:underline"
        @click="eliminarUsuario()"
    >
        Eliminar
    </button>
</template>

<script>
export default {
    props: {
        id: {
            type: Number,
            required: true,
        },
        nombreUsuario: {
            type: String,
            required: true,
        },
    },
    methods: {
        /**
         * Elimina la vacante mediante axios, con mensaje de confirmacion con sweetalert2.
         */
        eliminarUsuario: function () {
            Swal.fire({
                title: "¿Estás seguro?",
                html: `¿Seguro que deseas eliminar el usuario <strong>"${this.nombreUsuario}"</strong>?
				<br><small>Una vez eliminada no se podrá recuperar</small>`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, eliminar el usuario",
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn-primary",
                    cancelButton: "btn-secondary ml-3",
                },
                iconColor: "#14b8a6",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .delete(`./dashboard/${this.id}`)
                        .then((response) => {
                            // console.log(response);
                            Swal.fire({
                                title: "¡Eliminado!",
                                text: "El usuario ha sido eliminad.",
                                icon: "success",
                                buttonsStyling: false,
                                customClass: {
                                    confirmButton: "btn-primary",
                                },
                            });
                            // eliminar del DOM (tbody>tr>td>button)
                            this.$el.parentNode.parentNode.parentNode.removeChild(
                                this.$el.parentNode.parentNode
                            );
                        })
                        .catch((error) => {
                            // console.log(error);
                            Swal.fire(
                                "¡Error!",
                                "Ha ocurrido un error al eliminar el usuario.",
                                "error"
                            );
                        });
                }
            });
        },
    },
};
</script>
