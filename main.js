(($) => {

    let generator = new SerbianNameGenerator();
    let prefixes = generator.getPrefixes();
    let suffixes = generator.getSuffixes();
    let names = generator.generate();

    let prefixesContainer = $('#prefixes');
    let suffixesContainer = $('#suffixes');
    let namesContainer = $('#names');

    let prefixesHtml = '';
    for(let i in prefixes) {
        prefixesHtml += '<span class="tag tag-primary" style="margin-right: 5px">' + prefixes[i] + '</span>';
    }

    let suffixesHtml = '';
    for(let i in suffixes) {
        suffixesHtml += '<span class="tag tag-primary" style="margin-right: 5px">' + suffixes[i] + '</span>';
    }

    let namesHtml = '';
    for(let i in names) {
        namesHtml += '<li class="list-group-item">' + names[i] + '</li>';
    }

    prefixesContainer.html(prefixesHtml);
    suffixesContainer.html(suffixesHtml);
    namesContainer.html(namesHtml);


    $('#generate').on('click', () => {
        var name = names[Math.floor(Math.random()*names.length)];
        $('#recommended').html(name);
        $('#results').show();
    });

})(jQuery);