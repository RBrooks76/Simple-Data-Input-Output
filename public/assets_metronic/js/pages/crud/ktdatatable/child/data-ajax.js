'use strict';
// Class definition

var KTDatatableChildRemoteDataDemo = function() {
	// Private functions

	// demo initializer
	var demo = function() {

		var datatable = $('#kt_datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',

				source: {
					read: {
						url: url_get,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        },
					},
				},
				pageSize: 10, // display 20 records per page
				serverPaging: true,
				serverFiltering: false,
				serverSorting: true,
			},

			// layout definition
			layout: {
				scroll: false,
				footer: false,
			},

			// column sorting
			sortable: true,

			pagination: true,

			// detail: {
			// 	title: 'Load sub table',
			// 	content: subTableInit,
			// },

			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},

			// columns definition
			columns: [
				{
					field: 'make',
					title: 'Make',
					sortable: 'asc',
				}, {
					field: 'model',
					title: 'Model',
				}, {
					field: 'problem',
					title: 'Problem',
				}, {
					field: 'Actions',
					width: 125,
					title: 'Actions',
					sortable: false,
					overflow: 'visible',
					autoHide: false,
					template: function(row) {
						return `<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="onDelete(`+ row.id +`, this)">\
                                    <span class="svg-icon svg-icon-md">\
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                                <rect x="0" y="0" width="24" height="24"/>\
                                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                            </g>\
                                        </svg>\
                                    </span>\
                                </a>\
                            `;
					},
				}],
		});

		$('#kt_datatable_search_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Status');
		});

		$('#kt_datatable_search_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Type');
		});

		$('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();


		function subTableInit(e) {
			$('<div/>').attr('id', 'child_data_ajax_' + e.data.RecordID).appendTo(e.detailCell).KTDatatable({
				data: {
					type: 'remote',
					source: {
						read: {
							url: HOST_URL + '/api/datatables/demos/orders.php',
							params: {
								// custom query params
								query: {
									generalSearch: '',
									CustomerID: e.data.RecordID,
								},
							},
						},
					},
					pageSize: 5,
					serverPaging: true,
					serverFiltering: false,
					serverSorting: true,
				},

				// layout definition
			layout: {
					scroll: false,
					footer: false,

					// enable/disable datatable spinner.
					spinner: {
						type: 1,
						theme: 'default',
					},
				},

				sortable: true,

				// columns definition
				columns: [
					{
						field: 'RecordID',
						title: '#',
						sortable: false,
						width: 30,
					}, {
						field: 'OrderID',
						title: 'Order ID',
						template: function(row) {
							return '<span>' + row.OrderID + ' - ' + row.ShipCountry + '</span>';
						},
					}, {
						field: 'ShipCountry',
						title: 'Country',
						width: 100
					}, {
						field: 'ShipAddress',
						title: 'Ship Address',
					}, {
						field: 'ShipName',
						title: 'Ship Name',
					}, {
						field: 'TotalPayment',
						title: 'Payment',
						type: 'number',
					}, {
						field: 'Status',
						title: 'Status',
						// callback function support for column rendering
						template: function(row) {
							var status = {
								1: {'title': 'Pending', 'class': 'label-light-primary'},
								2: {'title': 'Delivered', 'class': ' label-light-danger'},
								3: {'title': 'Canceled', 'class': ' label-light-primary'},
								4: {'title': 'Success', 'class': ' label-light-success'},
								5: {'title': 'Info', 'class': ' label-light-info'},
								6: {'title': 'Danger', 'class': ' label-light-danger'},
								7: {'title': 'Warning', 'class': ' label-light-warning'},
							};
							return '<span class="label ' + status[row.Status].class + ' label-inline label-bold">' + status[row.Status].title + '</span>';
						},
					}, {
						field: 'Type',
						title: 'Type',
						autoHide: false,
						// callback function support for column rendering
						template: function(row) {
							var status = {
								1: {'title': 'Online', 'state': 'danger'},
								2: {'title': 'Retail', 'state': 'primary'},
								3: {'title': 'Direct', 'state': 'success'},
							};
							return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' +
								status[row.Type].state + '">' +
								status[row.Type].title + '</span>';
						},
					}],
			});
		}
	};

	return {
		// Public functions
		init: function() {
			// init dmeo
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableChildRemoteDataDemo.init();
});
