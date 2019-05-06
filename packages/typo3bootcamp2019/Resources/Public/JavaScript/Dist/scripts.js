/*!
 * Typo3BootCamp2019 v1.0.0 (https://www.hof-university.com/)
 * Copyright 2017-2018 HofUniversityBootcamp
 * Licensed under the GPL-2.0-or-later license
 */
console.log("WE LOVE TYPO3");

// Modal Confirmation handling
$('.confirmation-modal').on('shown.bs.modal', function(e) {
    $(this).find('.confirm').attr('href', $(e.relatedTarget).data('href'));
});

$('table').ddTableFilter();
