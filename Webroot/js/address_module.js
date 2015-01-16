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
	sections.each(function() {
		$(this).find('div.fieldset').addClass('hide');
		$(this).find('button.edit').on('click', dynamicReviewEditClick);
		$(this).find('button.cancel').on('click', dynamicReviewCancelClick);
		$(this).find('button.submit').on('click', dynamicReviewSubmitClick);
	})
}

function dynamicReviewToggleClick(e) {
	var parent = $(e.currentTarget).parent().addClass('hide');
	parent.siblings('div.fieldset').removeClass('hide')
}

function dynamicReviewCancelClick(e) {
	var parent = $(e.currentTarget).parent().addClass('hide');
	parent.siblings('div.review').removeClass('hide')
}

function dynamicReviewSubmitClick(e) {
	e.currentTarget.preventDefault();
	var address_edits = $(e.currentTarget).siblings('fieldset');
	
}

// ===================================================
// END -- DYNAMIC REVIEW BLOCK FUNCTIONS -- END
// ===================================================
//</editor-fold>
