using BLL.Entities;
using BLL.Services.SalesManagerServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
//using System.Web.Http.Cors;

namespace PL.Controllers.SalesManagerController
{
    
    public class CustomerController : ApiController
    {
        [Route("api/customers")]
        [HttpGet]
        public HttpResponseMessage GetAll()
        {
            var data = CustomerServices.Get();
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
        [Route("api/customer/create")]
        [HttpPost]
        public HttpResponseMessage Create(CustomerModel customer)
        {
            var data = CustomerServices.Create(customer);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
        [Route("api/customer/{id}")]
        [HttpGet]
        public HttpResponseMessage Get(int id)
        {
            var data = CustomerServices.Get(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/customer/delete/{id}")]
        [HttpGet]
        public HttpResponseMessage Delete(int id)
        {
            var data = CustomerServices.Delete(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }


        [Route("api/customer/update")]
        [HttpPost]
        public HttpResponseMessage Update(CustomerModel customer)
        {
            var data = CustomerServices.Update(customer);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
    }
}