$(document).ready(function(){
	if ($('section[id*="dynamic_review"]').length != 0) {
		initDynamicReview();
	}
})

//<editor-fold defaultstate="collapsed" desc="DYNAMIC REVIEW FUNCTIONS">
// ===================================================
// DYNAMIC REVIEW BLOCK FUNCTIONS
// ===================================================
function initDynamicReview() {
	var sections = $('section[id*="dynamic_review"]');
	initSection(sections);
//	sections.find('div.fieldset').addClass('hide');
//	sections.find('button.edit').on('click', dynamicReviewEditClick);
//	sections.find('button.cancel').on('click', dynamicReviewCancelClick);
//	sections.find('button.submit').on('click', dynamicReviewSubmitClick);
}

function initSection(sections) {
	$(sections).find('div.fieldset').addClass('hide');
	$(sections).find('button.edit').on('click', dynamicReviewEditClick);
	$(sections).find('button.cancel').on('click', dynamicReviewCancelClick);
	$(sections).find('button.submit').on('click', dynamicReviewSubmitClick);
}

function dynamicReviewEditClick(e) {
	var parent = $(e.currentTarget).parent().addClass('hide');
	parent.siblings('div.fieldset').removeClass('hide')
}

function dynamicReviewCancelClick(e) {
	var parent = $(e.currentTarget).parents('section[id*="dynamic_review_"]')
	parent.find('div.fieldset').addClass('hide');
	parent.find('div.review').removeClass('hide')
}

function dynamicReviewSubmitClick(e) {
	e.preventDefault();
	var section_id = $(e.currentTarget).parents('section').attr('id');
	var address_edits = $(e.currentTarget).siblings('fieldset').serialize();
	$.ajax({
		type: "POST",
		dataType: "JSON",
		data: address_edits,
		url: webroot + 'address_module/addresses/dynamic_review_edit',
		success: function (data) {
			if (data.result == 'success') {
				$('#' + section_id).replaceWith(data.section);
				initSection($('#' + section_id));
				$('#' + section_id).find('div.review').before(data.flash);
			} else {
				// result == 'failure'
				$(e.currentTarget).parent().prepend(data.flash);
			}
		},
		error: function (data) {
			
		}
	})
}

// ===================================================
// END -- DYNAMIC REVIEW BLOCK FUNCTIONS -- END
// ===================================================
//</editor-fold>
