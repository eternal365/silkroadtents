   app.directive('jsonData', function() {
    return {
        restrict: 'A',
        link: function(scope, element, attributes, controller) {
            var object = JSON.parse(element.html());
            scope[attributes.ngModel] = object ;
        }
    };
});



    app.directive("datepicker", function () {
      return {
            restrict: 'A',
            require: 'ngModel',
            link: function (scope, element, attrs, ngModelCtrl) {
                element.datepicker({
                    dateFormat: 'dd/mm/yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '2004:2030',
                    onSelect: function (date) {
                      ngModelCtrl.$setViewValue(date);
                    }
                });
            }
        };
    });

   app.directive("datepickerdob", function () {
      return {
            restrict: 'A',
            require: 'ngModel',
            link: function (scope, element, attrs, ngModelCtrl) {
                element.datepicker({
                    dateFormat: 'dd/mm/yy',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1932:2030',
                    onSelect: function (date) {
                      ngModelCtrl.$setViewValue(date);
                    }
                });
            }
        };
    });

    app.directive("datepickerlb", function () {
      return {
            restrict: 'A',
            require: 'ngModel',
            link: function (scope, element, attrs, ngModelCtrl) {
                element.datepicker({
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '2004:2030',
                    onSelect: function (date) {
                      ngModelCtrl.$setViewValue(date);
                    }
                });
            }
        };
    });


    app.directive('ngReallyClick', [function() {
    return {
        restrict: 'A',
        link: function(scope, element, attrs) {
            element.bind('click', function() {
                var message = attrs.ngReallyMessage;
                if (message && confirm(message)) {
                    scope.$apply(attrs.ngReallyClick);
                }
            });
        }
    }
}]);
  app.directive('ngConfirmClick', [
  function(){
    return {
      priority: -1,
      restrict: 'A',
      link: function(scope, element, attrs){
        element.bind('click', function(e){
          var message = attrs.ngConfirmClick;
          if(message && !confirm(message)){
            e.stopImmediatePropagation();
            e.preventDefault();
          }
        });
      }
    }
  }
]); 

  app.directive('passwordStrength', [
    function() {
      return {
        require: 'ngModel',
        restrict: 'E',
        scope: {
          password: '=ngModel'
        },

        link: function(scope, elem, attrs, ctrl) {
          scope.$watch('password', function(newVal) {

            scope.strength = isSatisfied(newVal && newVal.length >= 8) +
              isSatisfied(newVal && /[A-z]/.test(newVal)) +
              isSatisfied(newVal && /(?=.*\W)/.test(newVal)) +
              isSatisfied(newVal && /\d/.test(newVal));

            function isSatisfied(criteria) {
              return criteria ? 1 : 0;
            }
          }, true);
        },
        template: '<div class="progress">' +
          '<div class="progress-bar progress-bar-danger" style="width: {{strength >= 1 ? 25 : 0}}%"></div>' +
          '<div class="progress-bar progress-bar-warning" style="width: {{strength >= 2 ? 25 : 0}}%"></div>' +
          '<div class="progress-bar progress-bar-warning" style="width: {{strength >= 3 ? 25 : 0}}%"></div>' +
          '<div class="progress-bar progress-bar-success" style="width: {{strength >= 4 ? 25 : 0}}%"></div>' +
          '</div>'
      }
    }
  ])
  
  app.directive('patternValidator', [
    function() {
      return {
        require: 'ngModel',
        restrict: 'A',
        link: function(scope, elem, attrs, ctrl) {
          ctrl.$parsers.unshift(function(viewValue) {
            
            var patt = new RegExp(attrs.patternValidator);
            
            var isValid = patt.test(viewValue);

            ctrl.$setValidity('passwordPattern', isValid);

            // angular does this with all validators -> return isValid ? viewValue : undefined;
            // But it means that the ng-model will have a value of undefined
            // So just return viewValue!
            return viewValue;
            
          });
        }
      };
    }
  ]);

  app.directive('autoComplete', function($timeout) {
    return function(scope, iElement, iAttrs) {
            iElement.autocomplete({
                source: scope[iAttrs.uiItems],
                select: function() {
                    $timeout(function() {
                      iElement.trigger('input');
                    }, 0);
                }
            });
    };
});



  app.directive('match', function($parse) {
  return {
    require: 'ngModel',
    link: function(scope, elem, attrs, ctrl) {
      scope.$watch(function() {        
        return $parse(attrs.match)(scope) === ctrl.$modelValue;
      }, function(currentValue) {
        ctrl.$setValidity('mismatch', currentValue);
      });
    }
  };
});

  function parseDate(input) {
  var parts = input.split('-');
  return new Date(parts[2], parts[1]-1, parts[0]); 
}


app.filter("myfilter", function() {
  return function(items, from, to) {
        //alert("from :"+from);
        //alert("to :"+to);
        var df = parseDate(from);
        var dt = parseDate(to);
        var result = [];        
        for (var i=0; i<items.length; i++){
            var tf = new Date(items[i].pcs_date * 1000),
                tt = new Date(items[i].pcs_date * 1000);
            if (tf > df && tt < dt)  {
                result.push(items[i]);
            }
        }            
        return result;
  };
});

app.directive('myModal', function() {
   return {
     restrict: 'A',
     link: function(scope, element, attr) {
       scope.dismiss = function() {
           element.modal('hide');
       };
     }
   } 
});


app.directive('myFocus', function () {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            scope.$watch(attr.myFocus, function (n, o) {
                if (n != 0 && n) {
                    element[0].focus();
                }
            });
        }
    };
});

app.filter('setOrdinal', setOrdinal);

  setOrdinal.$inject = ['$filter'];
  function setOrdinal($filter){
    return function (input){
      function ordinal(number){ // Function from MomentJS
        var b = number % 10,
            output = (parseInt(number % 100 / 10) === 1) ? 'th' : (b === 1) ? 'st' : (b === 2) ? 'nd' : (b === 3) ? 'rd' : 'th';
        return number + output;
      }
      var date = $filter('date'),
          // https://docs.angularjs.org/api/ng/filter/date
          month = date(input,'MMMM'),
          day = date(input,'d'),
          year = date(input,'yyyy');
      day = ordinal(day);
      return month+' '+day+', '+year; // Output date however you need it here!
    };
  }

var luhnChk = function (luhn) {
    var len = luhn.length,
        mul = 0,
        prodArr = [
            [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            [0, 2, 4, 6, 8, 1, 3, 5, 7, 9]
        ],
        sum = 0;

    while (len--) {
        sum += prodArr[mul][parseInt(luhn.charAt(len), 10)];
        mul ^= 1;
    }

    return sum % 10 === 0 && sum > 0;
};


app.directive("luhnCheck", function () {
    return {
        restrict: "A",

        require: "ngModel",

        link: function (scope, element, attributes, ngModel) {

            ngModel.$validators.luhnCheck = function (modelValue) {

                var len = modelValue.length,
                    mul = 0,
                    prodArr = [
                        [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
                        [0, 2, 4, 6, 8, 1, 3, 5, 7, 9]
                    ],
                    sum = 0;

                while (len--) {
                    sum += prodArr[mul][parseInt(modelValue.charAt(len), 10)];
                    mul ^= 1;
                }

                return sum % 10 === 0 && sum > 0;
            }


        }
    };
});

app.directive('dateCheck', function() {
  return {
    restrict: 'A',
    require: 'ngModel',
    link: function(scope, element, attributes, ngModel) {

      function dateCheck(value) {

                    //alert($('#expmonth').val());
                   // alert($('#expyear').val());
                    var currentTime = new Date();
                    var month = parseInt(currentTime.getMonth() + 1);
                    var year = currentTime.getFullYear();
                     year = year.toString().substr(2,2);
                     year = parseInt(year);
                   // alert(month + ' ' + year);

                    

                    if (( parseInt($('#expyear').val()) <= year) &&
                        (parseInt($('#expmonth').val()) < month) )


                    { 
                            //alert('past');
                            ngModel.$setValidity('date-check', false);
                         
                            return value;
                    }
                    else {
                       // alert('future');
                        ngModel.$setValidity('date-check', true);
                        
                        return value;

                    }
                    
                   
      }

      ngModel.$parsers.push(dateCheck);
      ngModel.$formatters.push(dateCheck);

      scope.$watch(attributes.dateCheck, function() {
                       // alert('dchange');
                    ngModel.$setViewValue(ngModel.$viewValue);
                });
       
    }

  };
});

app.directive("modalShow", function () {
    return {
        restrict: "A",
        scope: {
            modalVisible: "="
        },
        link: function (scope, element, attrs) {

            //Hide or show the modal
            scope.showModal = function (visible) {
                if (visible) {
                    element.modal("show");
                }
                else {
                    element.modal("hide");
                }
            }

            //Check to see if the modal-visible attribute exists
            if (!attrs.modalVisible) {

                //The attribute isn't defined, show the modal by default
                scope.showModal(true);

            }
            else {

                //Watch for changes to the modal-visible attribute
                scope.$watch("modalVisible", function (newValue, oldValue) {
                    scope.showModal(newValue);
                });

                //Update the visible value when the dialog is closed through UI actions (Ok, cancel, etc.)
                element.bind("hide.bs.modal", function () {
                    scope.modalVisible = false;
                    if (!scope.$$phase && !scope.$root.$$phase)
                        scope.$apply();
                });

            }

        }
    };

});


app.directive("typeCheck", function ($parse) {
    return {
        restrict: "A",

        require: "ngModel",

        link: function (scope, element, attributes, ngModel) {
            var tCheck = function (ct,cn) {

                 console.log("ct is "+ct.name);   
                  console.log("cn is "+cn);   

                if ((/^5[1-5]/.test(cn)) && (ct.name == "Mastercard")) {

                    return true;
                } else if ((/^4/.test(cn)) && (ct.name == "Visa")) {

                    return true;
                }
                else if ((/^3[47]/.test(cn)) && (ct.name == "AMEX")) {

                    return true;
                } else {

                    return false;
                }

            }
          
            ngModel.$validators.typeCheck = function (modelValue) {
                var cnumber = scope.$eval(attributes.typeCheck);
              
                 ngModel.$setValidity('type-check', tCheck(modelValue,cnumber));
                 console.log("valid is "+tCheck(modelValue,cnumber));   
                 return modelValue;
            }

            scope.$watch(attributes.typeCheck, function () {
                //alert('dchange');
                ngModel.$validate();

            });
          


        }
    };
});
