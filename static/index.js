$.ajax({
  method: "GET",
  url: "https://m2.unlimgroup.ru/api/v1/tasks-view",
  headers: {
    Authorization: "Bearer bRVUaBTQ0aWWF1F59FA6VanibVOydhluDIRHzCjy97ac90e2"
  },
  success(response) {
    console.log(response);
  }  
})