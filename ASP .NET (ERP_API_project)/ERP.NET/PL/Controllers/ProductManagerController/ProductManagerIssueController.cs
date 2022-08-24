using BLL.Entities;
using BLL.Services.ProductManagerServices;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Net.Http;
using System.Web.Http;
using System.Web.Http.Cors;

namespace PL.Controllers.ProductManagerController
{
    [EnableCors("*", "*", "*")]
    public class ProductManagerIssueController : ApiController
    {
        [Route("api/ProductManager/issues")]
        [HttpGet]
        public HttpResponseMessage GetAll()
        {
            var data = ProductManagerIssueServices.Get();
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/ProductManager/issue/create")]
        [HttpPost]
        public HttpResponseMessage Create(IssueModel issue)
        {
            var data = ProductManagerIssueServices.Create(issue);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/ProductManager/issue/{id}")]
        [HttpGet]
        public HttpResponseMessage Get(int id)
        {
            var data = ProductManagerIssueServices.Get(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/ProductManager/issue/delete/{id}")]
        [HttpGet]
        public HttpResponseMessage Delete(int id)
        {
            var data = ProductManagerIssueServices.Delete(id);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }

        [Route("api/ProductManager/issue/update")]
        [HttpPost]
        public HttpResponseMessage Update(IssueModel issue)
        {
            var data = ProductManagerIssueServices.Update(issue);
            return Request.CreateResponse(HttpStatusCode.OK, data);
        }
    }
}
