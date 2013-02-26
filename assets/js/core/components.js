/**
 *	Define the components that could be added
 *	to the model.
 */
var components = [
	/**
	 *	Split Container
	 */
	{
		'can_add' : true,
		'label' : 'Split',
		'class' : 'split',
		'template' : '<ul class="split"></ul>',
		'default' : '<ul class="left"><li class="descriptor">Enter a description here.</li></ul>' +
					'<ul class="right"><li class="descriptor">Enter a description here.</li></ul>'
	},
	{
		'can_add' : false,
		'label' : 'Left',
		'class' : 'left',
		'template' : '<ul class="left"></ul>',
		'default' : '<li class="descriptor">Enter a description here.</li>'
	},
	{
		'can_add' : false,
		'label' : 'Right',
		'class' : 'right',
		'template' : '<ul class="right"></ul>',
		'default' : '<li class="descriptor">Enter a description here.</li>'
	},

	/**
	 *	General Container
	 */
	{
		'can_add' : false,
		'label' : 'Container',
		'class' : 'container',
		'template' : '<ul class="container"></ul>',
		'default' : '<div class="add"><i class="icon icon-plus"></i></div>'
	},

	/**
	 *	Section Container
	 */
	{
		'can_add' : false,
		'label' : 'Section',
		'class' : 'section',
		'template' : '<ul class="section"></ul>',
		'default' : '<li class="section_name">Section Name</li>' +
					'<ul class="section_content"><div class="add"><i class="icon icon-plus"></i></div></ul>'
	},
	{
		'can_add' : false,
		'label' : 'Section Name',
		'class' : 'section_name',
		'template' : '<li class="section_name"></li>',
		'default' : 'Section Name'
	},
	{
		'can_add' : false,
		'label' : 'Section Content',
		'class' : 'section_content',
		'template' : '<ul class="section_content"></ul>',
		'default' : '<div class="add"><i class="icon icon-plus"></i></div>'
	},

	/**
	 *	Editable Components
	 */
	{
		'can_add' : true,
		'label' : 'Title',
		'class' : 'title',
		'template' : '<li class="title"></li>',
		'default' : 'Enter a title here.'
	},
	{
		'can_add' : true,
		'label' : 'Sub-Title',
		'class' : 'subtitle',
		'template' : '<li class="subtitle"></li>',
		'default' : 'Enter a subtitle here'
	},
	{
		'can_add' : true,
		'label' : 'Description',
		'class' : 'descriptor',
		'template' : '<li class="descriptor"></li>',
		'default' : 'Enter a description here.'
	},
	{
		'can_add' : true,
		'label' : 'Bullet Point',
		'class' : 'li',
		'template' : '<li class="li"></li>',
		'default' : 'Enter a bullet point here.'
	}
];