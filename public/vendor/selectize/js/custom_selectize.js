

$( document ).ready(function() {
    $('#tags').selectize({
        plugins: ['restore_on_backspace'],
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        valueField: 'tag',
        labelField: 'tag',
        searchField: 'tag',
        options: tags,
        items : tags,
        create: function(input,callback) {
            return {
                tag: input
            },
            callback({ tag: input });
        }
    });

    $('#keywords').selectize({
        plugins: ['restore_on_backspace'],
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        valueField: 'keyword',
        labelField: 'keyword',
        searchField: 'keyword',
        options: keywords,
        items : keywords,
        create: function(input,callback) {
            return {
                keyword: input
            },
            callback({ keyword: input });
        }
    });
});