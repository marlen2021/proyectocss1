import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OlvidecontrasenaComponent } from './olvidecontrasena.component';

describe('OlvidecontrasenaComponent', () => {
  let component: OlvidecontrasenaComponent;
  let fixture: ComponentFixture<OlvidecontrasenaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ OlvidecontrasenaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(OlvidecontrasenaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
