describe('template spec', () => {
    it('passes', () => {
      cy.visit('https://example.cypress.io')
    })
  
    /* ==== Test Created with Cypress Studio ==== */
    it('paste test', function() {
      /* ==== Generated with Cypress Studio ==== */
      cy.visit('localhost:8080');
      cy.get('#message').click();
      cy.get('#message').type('test msg');
      cy.get('#passwordinput').clear('p');
      cy.get('#passwordinput').type('mdp');
      cy.wait(10000);
      cy.get('#sendbutton').click();
      cy.get('#pasteurl').click();
      cy.get('#passworddecrypt').clear('p');
      cy.get('#passworddecrypt').type('mdp');
      cy.get('#passwordform > .btn').click();
      /* ==== End Cypress Studio ==== */
    });
  })