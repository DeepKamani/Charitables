var vm = new Vue({
    el: '#app',
    data: {
        categoryId: '',
        categoryType: '',
        items: [],
        category: '',
        type: '',
        name: '',
        quantity: '',
        seen: false
    },


    methods: {
        addItem() {
            this.seen = true;
            this.items.push({
                category: this.categoryId,
                type: this.categoryType,
                name: this.name,
                quantity: this.quantity
            });

            this.name = null;
            this.quantity = null;
        },

        remove(index) {
            this.$delete(this.items, index);
        },

        parse(event) {
            event.preventDefault();
            var myObjStr = JSON.stringify(this.items);


            $.ajax({
                url: 'form-processingv2.php',
                type: 'POST',
                data: { items: myObjStr },
                success: function (response) {
                    console.log(response);
                }
            });
        }
    }
});

