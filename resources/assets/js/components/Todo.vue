<template>
    <li
        class="todo"
        :key="todo.id"
        :class="{ completed: todo.completed, editing: todo == editedTodo }">
        <div class="view">
            <input class="toggle" type="checkbox" v-model="todo.completed" @click="completeTodo">
            <label @dblclick="editTodo">{{ todo.title }}</label>
            <button class="destroy" @click="remove"></button>
        </div>
        <input class="edit" type="text"
               v-model="todo.title"
               v-todo-focus="todo == editedTodo"
               @blur="doneEdit"
               @keyup.enter="doneEdit"
               @keyup.esc="cancelEdit">
    </li>
</template>

<script>
    export default {
        name: "Todo",

        props: ['todo', 'editedTodo'],

        methods: {

            editTodo() {
                this.$emit('editTodo', this.todo);
            },

            doneEdit() {
                this.$emit('doneEdit', this.todo);
            },

            cancelEdit() {
                this.$emit('cancelEdit', this.todo)
            },

            remove() {
                this.$emit('remove', this.todo.id);
            },

            completeTodo() {
                this.$emit('completeTodo', this.todo);
            },
        },

        directives: {
            'todo-focus': function (el, binding) {
                if (binding.value) {
                    el.focus()
                }
            }
        }
    }
</script>

<style scoped>

</style>