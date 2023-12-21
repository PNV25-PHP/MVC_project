class passwordInput {
    #label
    #customClass
    #type = "text"
  
    static new () {
      var newInput = new passwordInput()
      return newInput
    }
  
    #initHtml() {
      var outerDivElement = document.createElement("div");
  
      // Create label element and set its attributes
      var labelElement = document.createElement("label");
      labelElement.setAttribute("for", "UserPassword");
      labelElement.setAttribute("class", "block text-sm font-medium text-neutral-600");
      labelElement.textContent = "Password";
  
      // Create a nested div element
      var innerDivElement = document.createElement("div");
      innerDivElement.setAttribute("class", "mt-1");
  
      // Create input element and set its attributes
      var inputElement = document.createElement("input");
      inputElement.setAttribute("id", "UserPassword");
      inputElement.setAttribute("name", "UserPassword");
      inputElement.setAttribute("type", "password");
      inputElement.setAttribute("autocomplete", "your password");
      inputElement.setAttribute("required", "");
      inputElement.setAttribute("placeholder", "Nhập mật khẩu của bạn");
      inputElement.setAttribute("class", "block w-full px-3 py-2 mt-2 mb-4  text-base text-neutral-600 placeholder-gray-500 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-200 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300");
  
      // Append label to inner div
      innerDivElement.appendChild(labelElement);
  
      // Append input to inner div
      innerDivElement.appendChild(inputElement);
  
      // Append inner div to outer div
      outerDivElement.setAttribute('class', this.#customClass)
      outerDivElement.appendChild(innerDivElement);
  
      return outerDivElement;
    }
  
    setLabel(label) {
      this.#label = label
      return this
    }
  
    setType(type) {
      this.#type = type
      return this
    }
  
    setCustomClass(customClass) {
      this.#customClass = customClass
      return this
    }
  
    appendTo(containerId) {
      document
        .getElementById(containerId)
        .appendChild(this.#initHtml())
    }
  }